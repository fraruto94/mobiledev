package projeti2.ailes;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

/**
 * Created by fraru on 12/03/2016.
 */
public class ControleActivity extends Activity implements OnClickListener {
Button connexion;
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.accueil);
        connexion = (Button) findViewById(R.id.connexion);
        connexion.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.connexion:


                //push from bottom to top

                Intent nextActivity = new Intent(this,BluetoothActivity.class);
                startActivity(nextActivity);
                //slide from right to left
                overridePendingTransition(R.anim.bottom_in, R.anim.left_out);
                //overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);
                break;



        }

    }
}
