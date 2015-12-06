package licornesduswag.Abbatoir;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;
import android.content.SharedPreferences;
import android.content.Context;

public class Settings extends Activity implements OnClickListener{
    private static final int act = 1;
    private Button savBtn;

    private TextView nomAbba;
    private TextView phone;
    private TextView addr;

    SharedPreferences settings;
    SharedPreferences.Editor editor;

        @Override
    protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.settings);
            savBtn = (Button)findViewById(R.id.SaveButton);
            nomAbba = (TextView)findViewById(R.id.NomAbbatoir);

            phone = (TextView)findViewById(R.id.Phone);
            addr = (TextView)findViewById(R.id.AddrAbbatoir);

            savBtn.setOnClickListener(this);
            Context context = getApplicationContext();
            settings = context.getSharedPreferences(getString(R.string.preference_file_key), Context.MODE_PRIVATE);
            editor = settings.edit();
            fields();
    }

    public void fields(){
        nomAbba.setText(settings.getString("nomAbba", "Nom"));

        phone.setText(settings.getString("Phone","Tél."));
        addr.setText(settings.getString("Address", "Adresse"));

    }

    public void onClick(View v){
            if(v.getId()==R.id.SaveButton){
                this.del();
                this.editor.putString("nomAbba", addr.getText().toString());
                this.editor.putString("Address", addr.getText().toString());
                this.editor.putString("Phone", phone.getText().toString());
                this.editor.commit();
                Intent menu = new Intent(Settings.this, MainActivity.class);
                startActivityForResult(menu, act);
            }
    }

    public void del(){
        this.editor.remove("nomAbba");
        this.editor.remove("Address");
        this.editor.remove("Phone");
    }
}
