<?php
class Payments extends Dbh{
    
    function sellCrypto($amountPaid, $coinValue, $cointype, $userID, $file_name) {
        $pdo = $this->connect();
    
        $tableName = 'deposit_requests';
        $columns = ['amount', 'coin_value', 'coin_type', 'user_id', 'proof'];
        $values = [$amountPaid, $coinValue, $cointype, $userID, $file_name];
        $insertData = insertDataAdvanced($tableName, $columns, $values);
    
        $insertId = $insertData['lastInsertId'];
        if ($insertData['rowCount'] == 1) { // Use '==' for comparison, not '='
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
    
            // Convert $amountPaid and $coinValue to floats before operations
            $amountPaid = (float) $amountPaid;
            $coinValue = (float) $coinValue;
    
            $transValues = [
                $userID, 
                $amountPaid - ($amountPaid * 0.02), 
                'credit', 
                ($coinValue - ($coinValue * 0.02)) . ' - ' . $cointype, 
                'pending', 
                $insertId
            ];
    
            echo insertData($transTableName, $transColumns, $transValues);
        } else {
            echo json_encode(["msg" => "Error initiating crypto trade", "stats" => $insertData]);
        }
    }
    

    function sellGiftcard($amountPaid, $coinValue, $cointype,  $userID, $file_name){
        $pdo = $this->connect();

        $tableName = 'deposit_requests';
        $columns = ['amount', 'coin_value', 'coin_type', 'user_id', 'proof'];
        $values = [$amountPaid, $coinValue, $cointype,  $userID, $file_name];
        $insertData =  insertDataAdvanced($tableName, $columns, $values);

        $insertId = $insertData['lastInsertId'];
        if($insertData['rowCount'] = 1){
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $amountPaid_deduct = $amountPaid - ($amountPaid * 0.02);
            $transValues = [$userID, $amountPaid, 'credit', $amountPaid_deduct.' - '.$cointype, 'pending', $insertId];

            echo insertData($transTableName, $transColumns, $transValues);


        }else{
            echo json_encode(["msg"=>"Error initiating crypto trade ", "stats"=>$insertData]);
        }

        // coin_value, amount, coin_type, user_id,
    }

    public function getGiftCards(){
        $sql = "SELECT * FROM giftcards ORDER BY giftcard";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function buyCrypto($amountPaid, $coinValue, $coinType, $walletAddress,  $userID){
        $pdo = $this->connect();

        $tableName = 'buy_requests';
        $columns = ['amount', 'coin_value', 'coin_type', 'wallet_address', 'user_id'];
        $values = [$amountPaid, $coinValue, $coinType, $walletAddress,  $userID];
        return insertDataAdvanced($tableName, $columns, $values)['rowCount'];

        // coin_value, amount, coin_type, user_id,
    }

    public function allTransactions($userID){
        $sql = "SELECT * FROM transaction_history WHERE user_id = '$userID'";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function pendingAcademy($userID){
        $sql = "SELECT * FROM academy WHERE user_id = :userID ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':userID', $userID, PDO::PARAM_INT);
    
        $stmt->execute();
    
        // Debug output
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function checkWithdrawal($userID){
        $sql = "SELECT * FROM profit_q WHERE user_id = '$userID'";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function bankWithdrawal($wAmount, $wMethod, $traderName, $userID){
        
        $tableName = 'profit_q';
        $columns = ['user_id', 'amt', 'trader', 'w_method'];
        $values = [$userID, $wAmount, $traderName, $wMethod];
        $insertData =  insertDataAdvanced($tableName, $columns, $values);

        $insertId = $insertData['lastInsertId'];
        if($insertData['rowCount'] = 1){
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $wAmount, 'debit', 'Bank Account', 'pending', $insertId];

            echo insertData($transTableName, $transColumns, $transValues);


        }else{
            echo json_encode(["msg"=>"Error initiating crypto trade ", "stats"=>$insertData]);
        }
    }

    public function chipperWithdrawal($wAmount, $wMethod, $traderName, $chipperTag, $userID){
        
        $tableName = 'profit_q';
        $columns = ['user_id', 'amt', 'trader', 'w_method', 'chipper_tag'];
        $values = [$userID, $wAmount, $traderName, $wMethod, $chipperTag];
        $insertData =  insertDataAdvanced($tableName, $columns, $values);

        $insertId = $insertData['lastInsertId'];
        if($insertData['rowCount'] = 1){
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $wAmount, 'debit', 'Chipper Tag', 'pending', $insertId];

            echo insertData($transTableName, $transColumns, $transValues);
        }else{
            echo json_encode(["msg"=>"Error initiating crypto trade ", "stats"=>$insertData]);
        }
    }

    public function cryptoWithdrawal($wAmount, $wMethod, $traderName, $wcoinType, $wAddress, $userID){
        
        $tableName = 'profit_q';
        $columns = ['user_id', 'amt', 'trader', 'w_address', 'w_method', 'coin_type'];
        $values = [$userID, $wAmount, $traderName, $wAddress, $wMethod, $wcoinType];
        $insertData =  insertDataAdvanced($tableName, $columns, $values);

        $insertId = $insertData['lastInsertId'];
        if($insertData['rowCount'] = 1){
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $wAmount, 'debit', 'Chipper Tag', 'pending', $insertId];

            echo insertData($transTableName, $transColumns, $transValues);
        }else{
            echo json_encode(["msg"=>"Error initiating crypto trade ", "stats"=>$insertData]);
        }
    }
    


}