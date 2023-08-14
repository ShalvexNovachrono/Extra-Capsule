# Extra-Capusle
The ExtraCapsule Database API is a PHP script that serves as an API endpoint for managing data in an SQLite database.

This project is part of "Database" which can be found [here](https://replit.com/@Nava10y/Database).



[![Link To My Profile](https://replit.com/badge/github/@Nava10y/Database)](https://replit.com/@Nava10y/)



> ## API Features:
> * Add Data (aPlus):
>   * Endpoint: POST request to "index.php" with "aPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID, extraCapsuleData or indexNumber (only if you want to edit a certain extra-capsule sub capsule)

> * Create extraCapsule (cPlus):
>   * Endpoint: POST request to "index.php" with "cPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID, extraCapsuleData

> * Retrieve Data (rPlus):
>   * Endpoint: POST request to "index.php" with "rPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID or indexNumber (only if you want to see a certain extra-capsule sub capsule) and byitself

> * Delete Data (dPlus):
>   * Endpoint: POST request to "index.php" with "dPlus" parameter.
>   * Required Parameters: userID, extraCapsuleID

