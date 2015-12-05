package licornesduswag.myapplication;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;
import android.content.SharedPreferences;
import android.content.Context;

import com.google.zxing.integration.android.IntentIntegrator;

public class Settings extends Activity implements OnClickListener{
    private static final int act = 1;
    private Button savBtn;
    private TextView firstName;
    private TextView lastName;
    private TextView phone;
    private TextView addr;
    SharedPreferences settings;
    SharedPreferences.Editor editor;

        @Override
    protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.settings);
            savBtn = (Button)findViewById(R.id.SaveButton);
            firstName = (TextView)findViewById(R.id.FirstName);
            lastName = (TextView)findViewById(R.id.LastName);
            phone = (TextView)findViewById(R.id.Phone);
            addr = (TextView)findViewById(R.id.Address);
            savBtn.setOnClickListener(this);
            Context context = getApplicationContext();
            settings = context.getSharedPreferences(getString(R.string.preference_file_key), Context.MODE_PRIVATE);
            editor = settings.edit();
            fields();
    }

    public void fields(){
        firstName.setText(settings.getString("FirstName", "Nom"));
        lastName.setText(settings.getString("LastName","Prénom"));
        phone.setText(settings.getString("Phone","Tél."));
        addr.setText(settings.getString("Address", "Adresse"));
    }

    public void onClick(View v){
            if(v.getId()==R.id.SaveButton){
                this.del();
                this.editor.putString("FirstName", firstName.getText().toString());
                this.editor.putString("LastName", lastName.getText().toString());
                this.editor.putString("Address", addr.getText().toString());
                this.editor.putString("Phone", phone.getText().toString());
                this.editor.commit();
                Intent menu = new Intent(Settings.this, MainActivity.class);
                startActivityForResult(menu, act);
            }
    }

    public void del(){
        this.editor.remove("FirstName");
        this.editor.remove("LastName");
        this.editor.remove("Address");
        this.editor.remove("Phone");
    }
}
