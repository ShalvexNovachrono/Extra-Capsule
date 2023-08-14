# Extra-Capusle
The ExtraCapsule Database API is a PHP script that serves as an API endpoint for managing data in an SQLite database.
[![Run on Replit](https://replit.com/@Nava10Y)](https://replit.com/@Nava10y/)


> ## API Features:
> * Add Data (aPlus):
>   * Endpoint: POST request to "/auth/extra-capsule-worker.php" with "aPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID, extraCapsuleData or indexNumber (only if you want to edit a certain extra-capsule sub capsule)

> * Create extraCapsule (cPlus):
>   * Endpoint: POST request to "/auth/extra-capsule-worker.php" with "cPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID, extraCapsuleData

> * Retrieve Data (rPlus):
>   * Endpoint: POST request to "/auth/extra-capsule-worker.php" with "rPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID or indexNumber (only if you want to see a certain extra-capsule sub capsule) and byitself

> * Delete Data (dPlus):
>   * Endpoint: POST request to "/auth/extra-capsule-worker.php" with "dPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID

