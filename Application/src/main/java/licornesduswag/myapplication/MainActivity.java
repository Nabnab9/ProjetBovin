package licornesduswag.myapplication;
import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;


public class MainActivity extends Activity implements OnClickListener{
    private static final int act = 1;
    private Button formBtn;
    private Button setBtn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        formBtn = (Button)findViewById(R.id.form_button);
        setBtn = (Button)findViewById(R.id.set_button);
        formBtn.setOnClickListener(this);
        setBtn.setOnClickListener(this);
    }

    public void onClick(View v){
        if(v.getId()==R.id.form_button){
            Intent form = new Intent(MainActivity.this, Form.class);
            startActivityForResult(form, act);
        }
        else if(v.getId()==R.id.set_button){
            Intent set = new Intent(MainActivity.this, Settings.class);
            startActivityForResult(set, act);
        }
    }
}
