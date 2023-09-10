<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP All Task</title>
</head>
<body>

    <?php 
            // empty array 
            $sales = [];


            /**
             * all dandom value
             * */ 

            for($i=0; $i < 12; $i++){
                $sales[] = rand(10000, 50000); 
            }
            
            function totalValue($old, $newData){
                return $old + $newData;
            }
            
            // print_r($sales);
            
            // max sales year in month
            $maxSale = array_search(max($sales), $sales);

            // low sales year in month
            $minSale = array_search(min($sales), $sales);

            // total year sales
            $totalArrayValue = array_reduce($sales, 'totalValue');
            echo "Total sales In This Year: " . $totalArrayValue;
            echo "\n";
            echo "\n";

            echo "This " . date("F", mktime(0, 0, 0, $maxSale, 1)) . " Max sales:" . $sales[$maxSale];
            echo "\n";
            echo "\n";
            echo "This " . date("F", mktime(0, 0, 0, $minSale, 1)) . " low sales:" . $sales[$minSale];

            echo "\n";
            echo "\n";

            // 
            rsort($sales);
            foreach( $sales as $month){
                echo "{$i} This Month Sales: {$month} ". "\n";
                $i--;
            }
    
    ?>
    
</body>
</html>