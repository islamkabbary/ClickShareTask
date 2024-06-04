# ClickShareTask

Brief description of the project.

## Installation

Follow these steps to set up the project:

1. **Clone the project repository**

    git clone https://github.com/islamkabbary/ClickShareTask.git

2. **Install PHP dependencies**

    composer install

3. **Install JavaScript dependencies**

    npm install
    npm run dev

4. **Create a new database**

    Ensure you have a database created for your project. Update your `.env` file with the appropriate database connection details.

5. **Add Google Sheet configuration**

    Add the Google Sheet configuration to your `.env` file by specifying the following parameters:
    
    GOOGLE_CLIENT_ID=your-client-id
    GOOGLE_CLIENT_SECRET=your-client-secret
    GOOGLE_SERVICE_ENABLED=true
    GOOGLE_SERVICE_ACCOUNT_JSON_LOCATION=your-service-account-json-location

    Replace `your-client-id`, `your-client-secret`, and `your-service-account-json-location` with your actual Google API client ID, client secret, and serviceaccount JSON file location respectively.

6. **Run database migrations and seeders (optional)**

    If you want to fill the database with some data, you can activate the following code for the job:

    php artisan schedule:run

## Diagram

If you need to view the project diagram, please refer to the `TaskClickShare.mwb` file located in the project directory. You can open this file using MySQL Workbench.

## Additional Notes

- Make sure to configure your `.env` file with the necessary credentials and configurations.
- Ensure you have the necessary permissions and access rights for the database and Google Sheet.
- You may need to configure additional services or settings depending on your project's requirements.

For further details, please refer to the project documentation or contact the project maintainers.

---

### Contact

If you have any questions or need further assistance, please contact:

- Name: Islam Kabbary
- Email: islamkabbary@gmail.com

