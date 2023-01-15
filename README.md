# aquia-study-drupal-theme-development-
Drupal テーマ開発入門講座

# はじめに
- Drupal9のローカル開発環境を構築する

# 操作方法
## 環境
- Drupal9.5.0
- Windows 10 pro
- lando v3.6.5
- git version 2.37.0.windows.1
- docker desktop v3.6.0
    - landoがサポートしているバージョンに設定。

## 構築手順
- アプリケーション起動
`lando start`
- Drupalプロジェクトの作成
    - `lando composer config --global process-timeout 6000` (※)
    - `lando composer create-project drupal/recommended-project:^9 tmp`
    - `lando ssh -c  'cp -r tmp/. .'`
    - `lando ssh -c 'rm -rf tmp'`

    - ※次のエラーが表示される場合は、composer install中にタイムアウトが発生している可能性がある。
        ```
        49/50 [===========================>]  98%    Install of drupal/core failed
        [RuntimeException]
        Could not delete /app/tmp/vendor/composer/8890134d/drupal-core-5f91bde/modules/views_ui/tests/src/Functional:
        ```
## 開始方法
- landoファイルがあるディレクトリをカレントディレクトリにする。
- `lando start` を実行する。

## 停止方法
- landoファイルがあるディレクトリをカレントディレクトリにする。
- `lando stop` を実行する。


## コンテナを再構築する
- landoファイルがあるディレクトリをカレントディレクトリにする。
- `lando rebuild` を実行する。
    - .lando.ymlファイルを編集した際に、このコマンドを実行することでファイル内容をコンテナ環境に反映できる。

## コンテナのシェルにアクセスする
- landoファイルがあるディレクトリをカレントディレクトリにする。
- `lando ssh` を実行する。
    - 未指定の場合、デフォルトでアプリケーションサーバーにアクセスするが、-sオプションでサービス名を指定してアクセスできる。

## コンテナのアプリケーションサーバー内でdrushコマンドを実行する。
- landoファイルがあるディレクトリをカレントディレクトリにする。
- `lando drush` を実行する。
    - Composerでdrushをインストールした場合に使用できる。