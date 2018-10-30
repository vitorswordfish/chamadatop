package com.example.felipe.scanqrcode;

import android.app.Activity;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;

public class MainActivity extends AppCompatActivity {
        Button btnScan;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnScan = (Button) findViewById(R.id.btnScan) ;
    final Activity activity = this;

    btnScan.setOnClickListener(new View.OnClickListener()); {
        @Override
        public void onClick(View Object v;
            v) {
                IntentIntegrator integrator = new IntentIntegrator(activity);
                integrator.setDesiredBarcodeFormats(IntentIntegrator.QR_CODE_TYPES);
                integrator.setPrompt("Camera Scan");
                integrator.setCameraId(0);
                integrator.initiateScan();
        }


    }
    @Override
    protected  void onActivityResult (int requestCode, int resultCode, Intent
        android.content.Intent data;
        data){
            IntentResult result = IntentIntegrator.parseActivityResult(requestCode, resultCode, data);
            if (result != null) {
                if (result.getContents() != null) {
                    alert(result.getContents()) ;

                }else {
                    alert("Scan cancelado");
                }

            } else {
                super.onActivityResult(requestCode, resultCode, data);

            }
        }
        private void alert(String int msg;
        msg)
        Toast.makeText(getApplicationContext(), msg,Toast.LENGTH_LONG).show();
    }

    private void alert(String contents) {
    }