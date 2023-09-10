<?php 

//Task Name: Multi-Dimensional Arrays and Data Manipulation


// 5 employes information
    $employees = [
        [
            'ID' => '1',
            'First Name' => 'John',
            'Last Name' => 'Doe',
            'Department' => 'HR',
            'Salary' => 15000,
        ],
        [
            'ID' => '2',
            'First Name' => 'Jane',
            'Last Name' => 'Smith',
            'Department' => 'IT',
            'Salary' => 20000,
        ],
        [
            'ID' => '3',
            'First Name' => 'Michael',
            'Last Name' => 'Johnson',
            'Department' => 'Sales',
            'Salary' => 55000,
        ],
        [
            'ID' => '4',
            'First Name' => 'Emily',
            'Last Name' => 'Brown',
            'Department' => 'IT',
            'Salary' => 25000,
        ],
        [
            'ID' => '5',
            'First Name' => 'David',
            'Last Name' => 'Lee',
            'Department' => 'Finance',
            'Salary' => 35000,
        ],
    ];


    // employes last column 
    $allEmployerAmount = array_column($employees, "Salary");


     // employees average salary
    $averageSalary = array_sum($allEmployerAmount) / count($employees);
    echo "All Employes Avager Salary:" . $averageSalary;

    echo "\n";

    

    // employer highest salary.
    $maxSalaryEmployee = max($allEmployerAmount);
    echo "Employer Highest Salary " . $maxSalaryEmployee;

    echo "\n";

    // total salary cost in company
    function salary($oldSalary, $newSalary){
        return $oldSalary + $newSalary;
    }
    $totalCost = array_reduce($allEmployerAmount, 'salary');
    echo "total company cost: " . $totalCost;


    // create a new array name is it_department
    $it_departments = array_filter($employees, function($employe){
        return $employe['Department'] === "IT";
    });

    echo "\n";
    echo "\n";



    // only outpur department array output
    echo "===== Only IT Department ======";

    echo "\n";

    foreach($it_departments as $it_department){
        echo "name: " .$it_department['First Name'] ." ". $it_department['Last Name'] . "Department: " . $it_department['Department'] . ", Salary: " . $it_department['Salary'] ." \n";
    }




    // only Sales Departments here
    foreach($employees as &$employe){
        if($employe['Department'] === "Sales"){
            $employe['Salary'] *= 1.1;
        } 
    }


    // Printing the updated employees array
    echo "Printing the updated employees array";
    print_r($employees);

?>