<div style="display: flex; justify-content: space-around; background: antiquewhite; color: black; font-size: 18px; max-width: 600px; margin: 0 auto; text-align: center; padding: 10px 0">
        <div style="border-left: 2px solid darkblue; padding: 0 55px; border-right: 2px solid darkblue;">
            <div> for </div>
            <?php
                for ($i = 0; $i < 10; $i++)
                {
                    echo "<p>$i</p>";
                };
            ?>
        </div>
        <div style="border-left: 2px solid darkblue; padding: 0 55px; border-right: 2px solid darkblue;">
            <div> while </div>
            <?php
                $counter = 0;
                while($counter < 10)
                {
                    $result = $counter++;
                    echo "<p>$result</p>";
                };
            ?>
        </div>
        <div style="border-left: 2px solid darkblue; padding: 0 55px; border-right: 2px solid darkblue;">
            <div> do while </div>
            <?php
                $counter_1 = 0;
                do {
                    $result = $counter_1++;
                    echo "<p>$result</p>";
                } while ($counter_1 < 10);
            ?>
        </div>
    </div>