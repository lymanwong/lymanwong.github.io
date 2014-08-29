package apps101.lyes_song;

import android.R;
import android.media.MediaPlayer;
import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.content.Intent;
import android.net.Uri;
import android.view.View;


public class MainActivity extends Activity {
	MediaPlayer todaywasagoodday;
	
    @Override
    protected void onCreate(Bundle savedInstanceState) {
    	super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main)
        todaywasagoodday = MediaPlayer.create(this, R.raw.)
    }

    @Override
    protected void onResume() {
    	todaywasagoodday.start();

    	super.onResume();
    }
    @Override
    protected void onPause() {
    	todaywasagoodday.stop();
    	todaywasagoodday.release();
    	super.onPause();
    }
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
       
    }
    public void openTwitter(View v) {
    	String url = "https://twitter.com/IceCubeOfficial";
    	Intent i = new Intent(Intent.ACTION_VIEW);
    	i.setData(Uri.parse(url));
    	startActivity(i);
    }
    public void openMG(View v) {
    	String url = "http://makeameme.org/character/today-was-a-good-day";
    	Intent i = new Intent(Intent.ACTION_VIEW);
    	i.setData(Uri.parse(url));
    	startActivity(i);
    }
}
