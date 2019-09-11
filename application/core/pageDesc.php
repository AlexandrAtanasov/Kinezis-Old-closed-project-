<title>
    <?php
        foreach ( $data as $row )
        {
            if ($row['PageTitle']) {
                echo $row['PageTitle'];
            };
        };
    ?>
</title>