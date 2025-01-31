# HNG Stage 0 Task - Basic Info API

A simple REST API that returns basic information including email, current datetime, and GitHub repository URL.

## API Endpoint

-   **URL**: `https://your-api-url.com/api/info`
-   **Method**: GET
-   **Response Format**: JSON

### Sample Response

```json
{
    "email": "your.email@example.com",
    "current_datetime": "2025-01-31T12:00:00Z",
    "github_url": "https://github.com/yourusername/hng-stage0"
}
```

## Setup Instructions

1. Clone repository
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Update environment variables
5. Run `php artisan serve`

## Deployment

The API is deployed at: [Your deployed URL]

## Technologies Used

-   PHP/Laravel
-   CORS enabled
-   JSON response format

## Author

## Uche Hart
