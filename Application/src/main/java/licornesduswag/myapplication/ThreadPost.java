package licornesduswag.myapplication;



/**
 * Created by Moi on 05/12/2015.
 */

import android.util.Log;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import org.apache.http.*;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;

public class ThreadPost extends Thread{

    ArrayList<NameValuePair> params;
    String verrifPHP;
    public ThreadPost (ArrayList <NameValuePair> listParam, String verrif)
    {
        params = listParam;
        verrifPHP = verrif;
    }
    public void run ()
    {
        //adresse localhost
        HttpPost httppost = new HttpPost("http://10.0.2.2/ProjetBovin/Site/"+verrifPHP);
        try {
            httppost.setEntity(new UrlEncodedFormEntity(params));
            HttpClient httpclient = new DefaultHttpClient();
            Log.d("Thread", "Thread");
            HttpResponse response=httpclient.execute(httppost); //Voila, la requête est envoyée
            BufferedReader reader= new BufferedReader(new InputStreamReader(response.getEntity().getContent()));
            String ligne;

            while((ligne=reader.readLine())!=null)
            {
                Log.d("Reponse",ligne);

            }
            reader.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
