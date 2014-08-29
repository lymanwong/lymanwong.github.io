package lye.paquitofelizcumple2014;

import java.io.IOException;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.content.res.AssetFileDescriptor;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.media.MediaPlayer;
import android.net.Uri;
import android.view.View.OnClickListener;


public class MainActivity extends Activity {
    private static final String TAG = "MyActivity";

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.);
  
    @Override
    public void onCreate() {
        super.onCreate();
        Layer.init(getApplicationContext(), "layer_test");
          }
        
}

	public void openYouTube(View v) {
		String url = "http://www.youtube.com/results?search_query=vegetta777%20minecraft&sm=3";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}
	public void openImages(View v) {
		String url = "https://www.google.com/search?site=&tbm=isch&source=hp&biw=1916&bih=878&q=vegeta777&oq=vegeta777&gs_l=img.3..0i10l10.5913.10979.0.13211.9.8.0.1.1.0.152.1006.0j8.8.0....0...1ac.1.37.img..0.9.1010.EAhh7UWVAWI#q=imagenes+de+minecraft+vegetta777&tbm=isch";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}	

	public void openFlickr(View v) {
		String url = "http://www.flickr.com/photos/lyman_wong";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}

	public void openWiki(View v) {
		String url = "http://minecraft.gamepedia.com/Minecraft_Wiki";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}
	public void openFlickr2(View v) {
		String url = "http://www.flickr.com/photos/marssy";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}	
	public void openCakeVideo(View v) {
		String url = "http://www.youtube.com/watch?v=nk-A7xPciyQ";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}
	public void openOrange(View v) {
		String url = "http://www.youtube.com/results?search_query=la%20molesta%20naranja&sm=3";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}
	public void openGumball(View v) {
		String url = "http://www.youtube.com/results?search_query=el%20increible%20mundo%20de%20gumball&sm=3";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}
}
