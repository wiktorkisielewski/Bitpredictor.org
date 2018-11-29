<p>DO IT AGAIN</p>
<?
$price = $_POST['user_prediction'];
$address = $_POST['user_address'];
$storage = "storage.html";
    $store = fopen ($storage,'a');
    fwrite($store, "<span name='price'>");
    fwrite($store, $price);
    fwrite($store, "</span><span>.....</span><span name='address'>");
    fwrite($store, $address);
    fwrite($store, "</span><br>");
    fclose($store);  
?>