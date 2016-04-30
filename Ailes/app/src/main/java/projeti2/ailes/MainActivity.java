package projeti2.ailes;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.Button;
import android.widget.RelativeLayout;
import android.view.MotionEvent;
import android.view.View.OnClickListener;

public class MainActivity extends AppCompatActivity implements OnClickListener {
    Button change;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        change = (Button) findViewById(R.id.change);
        change.setOnClickListener(this);


    }


    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.change:


                //push from bottom to top

                Intent nextActivity = new Intent(this, ControleActivity.class);
                startActivity(nextActivity);
                //slide from right to left
                overridePendingTransition(R.anim.right_in, R.anim.left_out);
                //overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_left);
                break;



        }
    }



}
