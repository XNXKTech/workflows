# Workflows

Here are the reusable workflows used by all XNXK projects.

[![LICENSE](https://img.shields.io/badge/License-Anti%20996-blue.svg?style=flat-square)](https://github.com/996icu/996.ICU/blob/master/LICENSE)
[![LICENSE](https://img.shields.io/badge/License-Apache--2.0-green.svg?style=flat-square)](LICENSE-APACHE)
[![996.icu](https://img.shields.io/badge/Link-996.icu-red.svg?style=flat-square)](https://996.icu)

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
- [Auto Merge](#auto-merge)

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

The `versions` and `stability` actually is sequence, to support strategy matrix needed by the workflow. if you don't need strategy matrix, you can use `"['8.0']"` or ignore `versions` and `stability`. it defaults to be the same as `"['8.0']"` and `"['prefer-stable']"`.

### Tests

```yaml
uses: XNXKTech/workflows/.github/workflows/laravel-test.yml@main
with:
  versions: "['8.0', '8.1']"
  stability: "['prefer-lowest', 'prefer-stable']"
```

### Inputs

| input              | required | default                                                                                       | description                                          |
|--------------------|----------|-----------------------------------------------------------------------------------------------|------------------------------------------------------|
| `versions`         | ❌        | `"['8.0']"`                                                                                   | Stringified JSON object listing target PHP versions  |
| `stability`        | ❌        | `"['prefer-stable']"`                                                                         | Stringified JSON object listing target PHP stability |
| `command`          | ❌        |                                                                                               | Command to prepare Laravel Application               |
| `database`         | ❌        | `postgres:12.4-alpine`                                                                        | Database to use for testing                          |
| `db_user`          | ❌        | `postgres`                                                                                    | Database user to use for testing                     |
| `redis`            | ❌        | `redis:5.0-alpine`                                                                            | Redis to use for testing                             |
| `extensions`       | ❌        | `dom, curl, libxml, mbstring, zip, pcntl, pdo, sqlite, pdo_sqlite, gd, redis, memcached, gmp` | List of PHP extensions to install                    |
| `coverage`         | ❌        | `xdebug`                                                                                      | Enable PHP code coverage                             |
| `tools`            | ❌        | `php-cs-fixer, phpunit`                                                                       | List of tools to install                             |
| `composer_version` | ❌        | `v2`                                                                                          | Version of Composer to use                           |

### Insights

```yaml
uses: XNXKTech/workflows/.github/workflows/laravel-insights.yml@main
with:
  versions: "['8.0', '8.1']"
  stability: "['prefer-lowest', 'prefer-stable']"
```

## ACME

## Cloudbase

```yaml
  cloudbase:
    name: TCB
    uses: XNXKTech/workflows/.github/workflows/cloudbase.yml@main
    with:
      environment: Production
      environment_url: https://www.xnxk.com
    secrets:
      SECRET_ID: ${{ secrets.TCB_SECRET_ID }}
      SECRET_KEY: ${{ secrets.TCB_SECRET_KEY }}
      ENV_ID: ${{ secrets.ENV_ID }}
```

## Terraform

```yaml
  terraform:
    name: Terraform
    uses: XNXKTech/workflows/.github/workflows/terraform.yml@main
    with:
      directory: "['github/teams']"
      env: TF_VAR_organization=XNXKTech
    secrets:
      GH_TOKEN: ${{ secrets.CI_PAT }}
      TENCENTCLOUD_SECRET_ID: ${{ secrets.TENCENTCLOUD_SECRET_ID }}
      TENCENTCLOUD_SECRET_KEY: ${{ secrets.TENCENTCLOUD_SECRET_KEY }}
```

## Auto Merge

### Auto Rebase

This workflow is used to rebase the pull request automatically.

```yaml
uses: XNXKTech/workflows/.github/workflows/auto-rebase.yml@main
secrets:
  GH_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```

### Dependabot

This workflow is used to automatically merge dependabot pull requests.

The `DEPENDABOT_TOKEN` is dependabot token of the GitHub account. **It needs to be set in Dependabot secrets, not Actions secrets.**

```yaml
uses: XNXKTech/workflows/.github/workflows/dependabot-auto-merge.yml@main
secrets:
  GH_TOKEN: ${{ secrets.DEPENDABOT_TOKEN }}
```

| input     | required | default            | description                      |
|-----------|----------|--------------------|----------------------------------|
| `target`  | ❌        | `patch`            | The target branch to merge into. |
| `command` | ❌        | `squash and merge` | The command to run.              |
| `botName` | ❌        | `starfire-bot`     | The name of the bot.             |

| input      | required | description           |
|------------|----------|-----------------------|
| `GH_TOKEN` | ✔        | The dependabot token. |

## License

The code in this repository, unless otherwise noted, is under the terms of both the [Anti 996](https://github.com/996icu/996.ICU/blob/master/LICENSE) License and the [Apache License (Version 2.0)](./LICENSE-APACHE).
