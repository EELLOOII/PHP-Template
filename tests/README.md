# Testing

This project uses PHPUnit 10 for testing.

## Running Tests

Run all tests:
```bash
composer test
```

Run PHPUnit directly:
```bash
./vendor/bin/phpunit
```

Run tests with detailed output:
```bash
./vendor/bin/phpunit --testdox
```

## Test Structure

```
tests/
├── Unit/           # Unit tests for individual components
│   └── HomeControllerTest.php
└── Feature/        # Feature/Integration tests
    └── UserControllerTest.php
```

## Current Test Coverage

- **HomeController** (Unit tests)
  - Verifies index method exists
  - Validates view data structure

- **UserController** (Feature tests)
  - Verifies index method exists and is callable
  - Validates controller instantiation
  - Checks namespace correctness

## Adding New Tests

1. Create a test file in `tests/Unit/` or `tests/Feature/`
2. Name it with `Test.php` suffix (e.g., `MyControllerTest.php`)
3. Extend `PHPUnit\Framework\TestCase`
4. Use `test` prefix for test methods