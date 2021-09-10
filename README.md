# easypay-api
PHP Native Library for EasyPay Api V2.0

# Usage
```new EasyPayAPI(new Config('account_id', 'api_key')) ```

## Create singlePayment (https://api.prod.easypay.pt/docs#tag/Single-Payment/paths/~1single/post)
```
$singlePayment = new SinglePayment();
$singlePayment->setCurrency('EUR');
$singlePayment->setCostumer('22ea3cc9-424b-489a-91b7-8955f643dc93', 'Customer Example', 'customer@example.com', '911234567', '+351', 'PT123456789', 'Key Example', 'PT');
$singlePayment->setMethod('mb');
$singlePayment->setType('sale');
$singlePayment->setValue(20);
$singlePayment->setCapture("string", "2006-01-02", "Descriptive Example");
```
