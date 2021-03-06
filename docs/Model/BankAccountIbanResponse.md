# BankAccountIbanResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iban** | **string** | The IBAN of the bank account | [optional] 
**bic** | **string** | The BIC of the bank account | [optional] 
**type** | **string** | The type of bank account | [optional] 
**owner_address** | [**\MarketPay\Model\Address**](Address.md) |  | [optional] 
**owner_name** | **string** | The name of the owner of the bank account | [optional] 
**user_id** | **string** | The object owner&#39;s UserId | [optional] 
**active** | **bool** | Whether the bank account is active or not | [optional] 
**bank_account_number** | **string** | Whatever type, the IBAN or Other should be mapped to that (most tools can´t deserialize polimorphic array of BankAccountResponse)  So we need the number in a common property | [optional] 
**id** | **string** | The item&#39;s ID | [optional] 
**creation_date** | **int** | When the item was created | [optional] 
**tag** | **string** | Custom data that you can add to this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


