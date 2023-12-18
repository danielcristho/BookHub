# BookHub

Library management system using Native PHP, MySQL & Docker.

## Use Case

- Separate user roles for Librarian and Member
- Member registration and book issue must be confirmed by a Librarian
- Automatic email confirmation to members on successful registration and book issue
- Automatic email reminders to book issuers to return books
- Automatic penalty deduction on returning a book after the due date

## Technologies & Tool

- PHP
- MySQL
- Docker

## Build

```bash
docker-compose -up -d --build
```

type in browser: [http://10.11.1.252](http://10.11.1.252), login as **Librarian** with username **admin** password **passwordd23**.

### Tampilan

![Home Page](assets/homepage.png)