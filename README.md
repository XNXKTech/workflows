# Workflows

Here are the reusable workflows used by all XNXK projects.

## Supported languages workflows

- [PHP](#php)
- [Node](#node)
- [🚧 Python (WIP)](#python)
- [Rust](#rust)
- [Wechat Mini Program](#wechat-mini-program)

## Supported Frameworks

- [Laravel](#laravel)

## Supported Tools

- [ACME](#acme)
- [Cloudbase](#cloudbase)
- [Terraform](#terraform)

## PHP

### PHP Code Style with php cs fixer

This reusable workflow is used to fix the code style of PHP files. is will fix the code style and create a fix pull request.

#### Quick Start

```yaml
uses: XNXKTech/workflows/.github/workflows/php-format.yml@main
secrets:
  CI_PAT: ${{ secrets.CI_PAT }}
```

The `CI_PAT` is the personal access token of the GitHub account.

## Node

## Python

## Rust

## Wechat Mini Program

## Laravel

The `versions` and `stability` actually is sequence, to support strategy matrix needed by the workflow. if you don't need strategy matrix, you can use `"[\"8.0\"]"` or ignore `versions` and `stability`. it defaults to be the same as `"[\"8.0\"]"` and `"[\"prefer-stable\"]`.

### Tests

```yaml
uses: XNXKTech/workflows/.github/workflows/laravel-test.yml@main
with:
  versions: "[\"8.0\", \"8.1\"]"
  stability: "[\"prefer-lowest\", \"prefer-stable\"]"
```

### Insights

```yaml
uses: XNXKTech/workflows/.github/workflows/laravel-insights.yml@main
with:
  versions: "[\"8.0\", \"8.1\"]"
  stability: "[\"prefer-lowest\", \"prefer-stable\"]"
```

## ACME

## Cloudbase

## Terraform


