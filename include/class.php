<?php

class UserClass extends Database
{
   //Create Account
    public function createAccount($data): array
    {
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $confirmpassword = htmlspecialchars($data['confirmpassword']);
        if(empty($name) || empty($email) || empty($password) || empty($confirmpassword)){
            $response = array(
                "status" => 0,
                "message" => "Please fill all field!"
            );
        }else{
            if($confirmpassword != $password){
                $response = array(
                    "status" => 0,
                    "message" => "Password Mismatch!"
                );
        }else{
                $stmt = $this->prepare("SELECT UPrimaryEmail FROM ". users ." WHERE UPrimaryEmail = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $response = array(
                        "status" => 0,
                        "message" => "Email address already in use!"
                    );
                } else {
                        $hash = password_hash("$password", PASSWORD_DEFAULT);
                        $stmt = $this->prepare("INSERT INTO " . users . " (UFullName, UPrimaryEmail, UPassword) VALUES ( :name, :email, :password) ");
                        $stmt->bindParam(":name", $name);
                        $stmt->bindParam(":email", $email);
                        $stmt->bindParam(":password", $hash);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            $response = array(
                                "status" => 1,
                                "message" => "Account Signup Successful"
                            );
                        } else {
                            $response = array(
                                "status" => 0,
                                "message" => "Something went wrong, try again!"
                            );
                        }
                }
                
            }
        }
        
        return $response;

    }


    //Create Login
    public function Login($email, $password):array
    {
        $stmt = $this->prepare("SELECT  _UId as id, Upassword as _password FROM ".users." WHERE UPrimaryEmail = :email" ); 
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if($stmt->rowCount()>0){
			
			$userData = $stmt->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $userData['_password'])){

                $response = array(
                    "status" => 1,
                    "userid" => $userData['id']
                );
            }else{
				
				$response = array(
                    "status" => 0,
                    "message" => "Invalid Password!"
                );
				
			}
        }else{
            $response = array(
                "status" => 0,
                "message" => "Invalid Email!"
            );
        }
        return $response;
    }


     //Get Users Profile
     public function getUserProfile($loginId)
     {
         $stmt = $this->prepare ("SELECT * FROM ". users ." WHERE _UId = :Id "); 
         $stmt->bindParam(":Id", $loginId);
         $stmt->execute();
         if($stmt->rowCount()>0){
             
             $response = $stmt->fetch(PDO::FETCH_ASSOC);
             }else{
                 
                 $response = 0;
             }
         return $response;
     }


    //Fetch Products from data base
    public function Products():array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, oldPrice as _OPrice, newPrice as _NPrice, shortProdDesc as _sDesc, longProdDesc as _lDesc, PStatus as _status, brand as _brand, prodAvailability as proavail FROM ". products ." WHERE PStatus = 'ON' " );
        $stmt->execute();
        if($stmt->rowCount()>0){
			
			while($userData = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $userData;
            }

        $response = array(
                "status" => 200,
                "message" => "product found",
                "data" => $response, 
        );
			
        }else{
            $response = array(
                "status" => 0,
                "message" => "No Product Found!"
            );
        }
        return $response;
    }
    



        // Query for Departments of Products
    public function productDepartment(): array
    {
        $stmt = $this->prepare("SELECT cat_Id as _id, catName as _Name, catStatus as _status FROM  " . category . " WHERE catStatus = 'True' ORDER BY cat_Id DESC LIMIT 10");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while ($rowDepartment = $stmt->fetch(PDO::FETCH_ASSOC)) {
                # code...
                $response[] = $rowDepartment;
            }
            $response = array(
                "status" => 200,
                "message" => "Categories avaialable",
                "data" => $response,
            );
        }else{
            $response = array(
                "status" => 0,
                "message" => "No categoriy found"
            );
        }
        return $response;
    }


    // Query for Featured Product

    public function featuredProduct(): array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, oldPrice as _OPrice, newPrice as _NPrice, PDesc as _Desc, PStatus as _status, brand as _brand FROM ". products ." WHERE PStatus = 'ON' && featuredProduct = 'featured' " );
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($rowFeatured = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $rowFeatured;
            }
            $response = array(
                "status" => 200,
                "message" => "Featured Products available!",
                "data" => $response,
            );
        }else{
            $response = array(
                "status" => 0,
                "message" => "Featured Products not available!"
            );
        }
        return $response;

    }


    // Query for Product category
    public function productCategory(): array
    {
        $stmt = $this->prepare("SELECT cat_Id as _id, catName as _Name, catStatus as _status FROM  " . category . " WHERE catStatus = 'True' ORDER BY cat_Id DESC LIMIT 4");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while ($rowCategory = $stmt->fetch(PDO::FETCH_ASSOC)) {
                # code...
                $response[] = $rowCategory;
            }
            $response = array(
                "status" => 200,
                "message" => "Categories avaialable",
                "data" => $response,
            );
        }else{
            $response = array(
                "status" => 0,
                "message" => "No categoriy found"
            );
        }
        return $response;
    }


    // Query for Latest category
    public function latestProduct(): array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, PDesc as _Desc, oldPrice as _OPrice, newPrice as _NPrice, PStatus as _status, brand as _brand FROM ". products ." WHERE PStatus = 'ON' ORDER BY PId DESC LIMIT 8");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($rowLatest = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $rowLatest;
            }
            $response = array(
                "status" => 200,
                "message" => "Successful",
                "data" => $response,
            );
        }else{
                $response = array(
                "status" => 0,
                "message" => "Failed!",
            );
            
        }
        return $response;
    }


    // Query for Top Rated category
    public function topProduct(): array
    {
        $stmt = $this->prepare("SELECT PId as _id, PName as _Name, PSku as _Sku, PDesc as _Desc, PStatus as _status, brand as _brand, PRating as _Rating FROM ". products ." WHERE PStatus = 'ON' ORDER BY _Rating ");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($rowTopProduct = $stmt->fetch(PDO::FETCH_ASSOC)){
                $response[] = $rowTopProduct;
            }
            $response = array(
                "status" => 200,
                "message" => "Successful",
                "data" => $response,
            );
        }else{
                $response = array(
                "status" => 0,
                "message" => "Failed!",
            );
            
        }
        return $response;
    }


    //Calculating percentage off
    public function percentageOff($new_price, $old_price)
    {
        $change_in_price = $old_price - $new_price;
        $discount_value = $change_in_price /$new_price * 100;
        return round($discount_value);
        
        }


    //Contact Page Query
    public function contactUs($data): array
    {
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $message = htmlspecialchars($data['message']);
        if(empty($name) || empty($email) || empty($message)){
            $response = array(
                "status" => 0,
                "message" => '<div style="color:red; padding: 12px;">Please !</div>'
            );
        }else{

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $response = array(
                    "status" => 0,
                    "message" => '<div style="color:red; padding: 12px;">Input a valid email!</div>'
                );
            }else{
                
            $stmt = $this->prepare("INSERT INTO " . contact . " (contactName, contactEmail, contactMessage) VALUES ( :name, :email, :message) ");
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":message", $message);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $response = array(
                    "status" => 1,
                    "message" => "Success"
                );
            } else {
                $response = array(
                    "status" => 0,
                    "message" => "Something went wrong, try again!"
                );
            }
        }

    }
    return $response;
    }



    //Create Add to cart
    public function addtocart($id, $loginId)
    {    
        $stmt = $this->prepare("INSERT INTO " . cart . " (product_id, user_id, product_qty) VALUES ( :product_id, :user_id, '1') ");
        $stmt->bindParam(":product_id", $id);
        $stmt->bindParam(":user_id", $loginId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $response = 1;
        } else {
            $response = 0;
        }

    return $response;
    }


    // Itemize total items in Cart
    public function CartItems($id){
        $stmt = $this->prepare('SELECT cart_id as _id, PName as _productname, newPrice as productPrice, product_qty as qty FROM  '.cart .' left join '.products.' on product_id=PId  WHERE user_id = :user_id ');
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();
        

      if($stmt->rowCount()>0){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $response[] = $row;
        }
      }else{
        $response = 0;
      }
    return $response;
    }


    // Calculate Total Price in Cart
    public function totalinCart($id){
        $stmt = $this->prepare('SELECT sum(newPrice) as _total FROM  '. cart .' left join '.products.' on product_id=PId  WHERE user_id = :user_id ');
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['_total'];
    }
    
    //Remove item from cart
    public function removeCart($cart_id){
        $id = $_GET['id'];
        $stmt = $pdo->prepare( 'DELETE FROM '. cart .' WHERE id = :cart_id');
        $stmt = $this->prepare($sql_remove);
        $stmt->bindValue(':cart_id', $cart_id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $response = 0;
    }else{

    }
    return $response;
}

//  Search Query

    public function searchProducts($search){
        
        $stmt = $this->prepare("SELECT * FROM ".products." WHERE PName LIKE '%$search%'");
        $stmt->execute();
        $response=[];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $response[]=$row;
        }
        
    return $response;
}
}

?>
