<?php
class Payments extends Dbh{
    
    function sellCrypto($amountPaid, $coinValue, $cointype,  $userID, $file_name){
        $pdo = $this->connect();

        $tableName = 'deposit_requests';
        $columns = ['amount', 'coin_value', 'coin_type', 'user_id', 'proof'];
        $values = [$amountPaid, $coinValue, $cointype,  $userID, $file_name];
        $insertData =  insertDataAdvanced($tableName, $columns, $values);

        $insertId = $insertData['lastInsertId'];
        if($insertData['rowCount'] = 1){
            $transTableName = 'transaction_history';
            $transColumns = ['user_id', 'amount', 't_type', 'destination', 't_status', 'pending_id'];
            $transValues = [$userID, $amountPaid - ($amountPaid *0.02), 'credit', $coinValue - ($coinValue * 0.02).' - '.$cointype, 'pending', $insertId];

            echo insertData($transTableName, $transColumns, $transValues);


        }else{
            echo json_encode(["msg"=>"Error initiating crypto trade ", "stats"=>$insertData]);
        }

        // coin_value, amount, coin_type, user_id,
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

    function buyCrypto($amountPaid, $coinValue, $coinType, $walletAddress,  $userID){
        $pdo = $this->connect();

        $tableName = 'buy_requests';
        $columns = ['amount', 'coin_value', 'coin_type', 'wallet_address', 'user_id'];
        $values = [$amountPaid, $coinValue, $coinType, $walletAddress,  $userID];
        return insertDataAdvanced($tableName, $columns, $values)['rowCount'];

        // coin_value, amount, coin_type, user_id,
    }


}