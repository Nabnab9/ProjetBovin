package licornesduswag.myapplication;



/**
 * Created by Moi on 05/12/2015.
 */

import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import org.apache.http.*;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;

public class ThreadPost extends Thread{

    ArrayList<NameValuePair> params;
    public ThreadPost (ArrayList <NameValuePair> listParam)
    {
        params = listParam;
    }
    public void run ()
    {
        HttpPost httppost = new HttpPost("http://localhost/test.php");
        try {
            httppost.setEntity(new UrlEncodedFormEntity(params));
            HttpClient httpclient = new DefaultHttpClient();
            httpclient.execute(httppost); //Voila, la requête est envoyée

        } catch (Exception e) {
            e.printStackTrace();
        }


    }
}
