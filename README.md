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

## ACME

## Cloudbase

## Terraform


