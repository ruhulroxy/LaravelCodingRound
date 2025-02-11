# Laravel Coding Round

## Installation
1. Clone the repository:
   	- git clone https://github.com/ruhulroxy/LaravelCodingRound.git
   	- cd LaravelCodingRound

2. Install dependencies:
	- Install PHP 8.1, Apache, MySQL
	- composer install
	- composer update
3. Configure .env file:
4. Run migrations:
	- php artisan migrate
5. Start the server:
    - php artisan serve

## API Endpoints
### Blog Post API
- `POST /api/posts` - Create a post
- `GET /api/posts` - List all posts
- `GET /api/posts/{id}` - View single post

### User Registration API
- `POST /api/register` - Register a user

### Task Management API
- `POST /api/tasks` - Create a task
- `PATCH /api/tasks/{id}` - Mark task as completed
- `GET /api/tasks/pending` - Get pending tasks
