package com.example.locationtracker;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;

import android.view.Menu;
import android.view.MenuItem;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Toast;

public class MainActivity extends Activity {
	WebView mWebview;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);

		 mWebview = (WebView)findViewById(R.id.webview);
		 mWebview.getSettings().setJavaScriptEnabled(true);
	     
	       
	        final Activity activity = this;

	        mWebview.setWebViewClient(new WebViewClient() {
	            public void onReceivedError(WebView view, int errorCode, String description, String failingUrl) {
	                Toast.makeText(activity, description, Toast.LENGTH_SHORT).show();
	            }
	        });
	        mWebview.getSettings().setLoadWithOverviewMode(true);
	        mWebview.getSettings().setUseWideViewPort(true);
	        mWebview .loadUrl("");//enter your url in the .loadurl function
	        
	                                   
	        
	      

	    }
	
	

	@Override
	protected void onResume() {
		// TODO Auto-generated method stub
		super.onResume();
		  mWebview .loadUrl("");//enter your url in the .loadurl function
		
	}



	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}



	@Override
	public boolean onMenuItemSelected(int featureId, MenuItem item) {
		// TODO Auto-generated method stub
		
		MainActivity.this.onResume();
		
		return super.onMenuItemSelected(featureId, item);
	
		
		
		
	}

}
