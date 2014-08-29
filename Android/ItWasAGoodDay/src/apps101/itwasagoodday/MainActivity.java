package apps101.itwasagoodday;

import android.media.MediaPlayer;
import android.net.Uri;
import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.util.*;

public class MainActivity extends Activity {
	MediaPlayer goodday;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		Log.e("Pickle", "onCreate");
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
	}

	@Override
	protected void onResume() {
		Log.e("Pickle", "onResume");
		goodday = MediaPlayer.create(this, R.raw.it_was_a_good_day);
		goodday.start();
		super.onResume();
	}

	@Override
	protected void onPause() {
		Log.e("Pickle", "onPause");
		goodday.stop();
		goodday.release();
		super.onPause();
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

	public void openFB(View v) {
		String url = "https://www.facebook.com/IceCube?ref=br_tf";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}

	public void openTwitter(View v) {
		String url = "https://twitter.com/icecube";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}

	public void openMeme(View v) {
		String url = "http://memegenerator.net/Ice-Cube-Good-Day";
		Intent i = new Intent(Intent.ACTION_VIEW);
		i.setData(Uri.parse(url));
		startActivity(i);
	}
}
