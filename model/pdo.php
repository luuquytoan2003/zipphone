<?php
    include_once 'database.php';
    function pdo_execute($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        
        //func_get_args(): lấy mảng tất cả các tham số được truyền vào hàm.
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql); //prepare chuẩn bị chuyển hóa câu lệnh sql
            $stmt->execute($sql_args); // thực thi câu lệnh sql
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
        }
        catch(PDOException $e){
        throw $e;
        }
        finally{
        unset($conn);
        }
    }
        

    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }


?>