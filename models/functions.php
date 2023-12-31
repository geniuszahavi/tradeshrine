<?php
function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Function to perform database insertions
function insertData($tableName, $columns, $values) {
    try {
        // Create an instance of the Dbh class
        $dbh = new Dbh();

        $pdo = $dbh->connect();

        // Create a comma-separated string of column names
        $columnString = implode(', ', $columns);

        // Create a placeholder string for values
        $valuePlaceholders = implode(', ', array_fill(0, count($values), '?'));

        // Prepare the SQL statement
        $sql = "INSERT INTO $tableName ($columnString) VALUES ($valuePlaceholders)";
        $stmt = $pdo->prepare($sql);

        // Bind values to placeholders
        for ($i = 0; $i < count($values); $i++) {
            $stmt->bindValue($i + 1, $values[$i]);
        }

        // Execute the statement
        $stmt->execute();

        // Return the last inserted ID
        // return $pdo->lastInsertId();
        return $stmt->rowCount();
    } catch (PDOException $e) {
        // Handle the exception (You might want to log or display an error message)
        echo "Error: " . $e->getMessage() .' in '.$e->getFile(). ' - '.$e->getLine();
        return false;
    }
}

function insertDataAdvanced($tableName, $columns, $values) {
    $result =[];
    try {
        // Create an instance of the Dbh class

        $dbh = new Dbh();
        $pdo = $dbh->connect();



        // Create a comma-separated string of column names
        $columnString = implode(', ', $columns);

        // Create a placeholder string for values
        $valuePlaceholders = implode(', ', array_fill(0, count($values), '?'));

        // Prepare the SQL statement
        $sql = "INSERT INTO $tableName ($columnString) VALUES ($valuePlaceholders)";
        $stmt = $pdo->prepare($sql);

        // Bind values to placeholders
        for ($i = 0; $i < count($values); $i++) {
            $stmt->bindValue($i + 1, $values[$i]);
        }

        // Execute the statement
        $stmt->execute();

        // Return the last inserted ID
        $result['lastInsertId']  = $pdo->lastInsertId();
        $result['rowCount'] =  $stmt->rowCount();
        return $result;
    } catch (PDOException $e) {
        // Handle the exception (You might want to log or display an error message)
        echo "Error: " . $e->getMessage();
        return false;
    }
}

// Function to perform database updates
function updateData($tableName, $columns, $values, $conditionColumn, $conditionValue) {
    try {
        // Create an instance of the Dbh class
        $dbh = new Dbh();

        // Create a string for setting each column in the update statement
        $setStatements = "";
        for ($i = 0; $i < count($columns); $i++) {
            $setStatements .= "$columns[$i] = ?";
            if ($i < count($columns) - 1) {
                $setStatements .= ', ';
            }
        }

        // Prepare the SQL statement
        $sql = "UPDATE $tableName SET $setStatements WHERE $conditionColumn = ?";
        $stmt = $dbh->connect()->prepare($sql);

        // Bind values to placeholders
        for ($i = 0; $i < count($values); $i++) {
            $stmt->bindValue($i + 1, $values[$i]);
        }

        // Bind the condition value
        $stmt->bindValue(count($values) + 1, $conditionValue);

        // Execute the statement
        $stmt->execute();

        // Return the number of affected rows
        return $stmt->rowCount();
    } catch (PDOException $e) {
        // Handle the exception (You might want to log or display an error message)
        echo "Error: " . $e->getMessage();
        return false;
    }
}

// Function to fetch data from the database
function fetchData($tableName, $columns = "*", $conditionColumn = null, $conditionValue = null) {
    try {
        // Create an instance of the Dbh class
        $dbh = new Dbh();

        // Create a string for selecting columns in the SQL statement
        $selectColumns = is_array($columns) ? implode(', ', $columns) : $columns;

        // Prepare the SQL statement
        $sql = "SELECT $selectColumns FROM $tableName";

        // Add a WHERE clause if a condition is provided
        if ($conditionColumn !== null && $conditionValue !== null) {
            $sql .= " WHERE $conditionColumn = ?";
        }

        // Prepare and execute the statement
        $stmt = $dbh->connect()->prepare($sql);

        // Bind the condition value if a condition is provided
        if ($conditionColumn !== null && $conditionValue !== null) {
            $stmt->bindValue(1, $conditionValue);
        }

        // Execute the statement
        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch();

        return $result;
    } catch (PDOException $e) {
        // Handle the exception (You might want to log or display an error message)
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function deleteRecord($tableName, $conditionField, $conditionValue) {
    try {
        // Establish a database connection
        $db = new Dbh();

        // Prepare the SQL statement
        $stmt = $db->connect()->prepare("DELETE FROM $tableName WHERE $conditionField = :conditionValue");

        // Bind parameters
        $stmt->bindParam(':conditionValue', $conditionValue);

        // Execute the statement
        if ($stmt->execute()) {
            // Record deleted successfully
            return true;
        } else {
            // Error in execution
            return false;
        }
    } catch (PDOException $e) {
        // Handle exceptions (e.g., log the error)
        return false;
    }
}


// Example usage:
// $tableName = "your_table";
// $columnsToSelect = ["column1", "column2", "column3"];
// $conditionColumn = "id";
// $conditionValue = 1;

// try {
//     $data = fetchData($tableName, $columnsToSelect, $conditionColumn, $conditionValue);

//     if ($data !== false) {
//         print_r($data);
//     } else {
//         echo "Failed to fetch data.";
//     }
// } catch (Exception $e) {
//     // Handle any other exceptions that might occur
//     echo "Error: " . $e->getMessage();
// }