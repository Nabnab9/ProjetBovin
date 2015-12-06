package licornesduswag.Abbatoir;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;
import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;

import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;



import java.util.ArrayList;

public class Form extends Activity implements OnClickListener{
    private Button scanBtn;
    private Button saveBtn;
    private TextView codeBoucle;
    private TextView dateDeMort;




    SharedPreferences settings;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.form);
        scanBtn = (Button)findViewById(R.id.ScanButton);
        saveBtn = (Button)findViewById(R.id.SubmitButton);
        codeBoucle = (EditText)findViewById(R.id.Code128);
        dateDeMort = (EditText)findViewById(R.id.DeathDate);




        scanBtn.setOnClickListener(this);
        saveBtn.setOnClickListener(this);

        Context context = getApplicationContext();
        settings = context.getSharedPreferences(getString(R.string.preference_file_key), Context.MODE_PRIVATE);
    }

    public void onClick(View v){
        if(v.getId()==R.id.ScanButton){
            Log.d("Scan","BoutonScanner");
            IntentIntegrator scanIntegrator = new IntentIntegrator(this);

            scanIntegrator.initiateScan();
        }
        else if(v.getId()==R.id.SubmitButton){
            Log.d("Scan","Enregistrer");
            //On crée la liste qui contiendra tous nos paramètres
            ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();


            //Et on y rajoute nos paramétres
            //Paramètres sur la vache

            postParameters.add(new BasicNameValuePair("code_boucle",  codeBoucle.getText().toString()));
            postParameters.add(new BasicNameValuePair("date_mort", dateDeMort.getText().toString()));
            // Paramètres sur l'abbat
            postParameters.add(new BasicNameValuePair("nom_abat",settings.getString("nomAbba","NomAgri")));
            postParameters.add(new BasicNameValuePair("n_tel_abat",settings.getString("Phone", "Tel")));
            postParameters.add(new BasicNameValuePair("adr_abat",settings.getString("Address", "Adresse")));


            ThreadPost threadPost = new ThreadPost(postParameters);
            threadPost.start();



        }
    }

    public void onActivityResult(int requestCode, int resultCode, Intent intent) {
        IntentResult scanningResult = IntentIntegrator.parseActivityResult(requestCode, resultCode, intent);
        if (scanningResult != null) {
            String scanContent = scanningResult.getContents();
            codeBoucle.setText(scanContent);
        }
        else{
            Toast toast = Toast.makeText(getApplicationContext(),
                    "Aucune donnée scannée", Toast.LENGTH_SHORT);
            toast.show();
        }
    }
}


