# Dockerで作るPHP開発環境（入門編）

博多TECH塾　Vol.55

https://hakata-tech-juku.connpass.com/event/99095/

のサンプルコードです。

## ファイル

- demo1  
dockerの起動サンプル

- demo2  
docker-composeのWordPress起動サンプル  
※WordPressは同梱していないので、別途取得しwordpressディレクトリに配置してください。

```
demo2/
├── docker-compose-env.yml # 環境変数利用版
├── docker-compose.yml
├── php/                   # Appコンテナ用 Dockerfile等
└── wordpress/             # ドキュメントルート／WordPress設置ディレクトリ
    └── wp-config-env.php  # 環境変数利用版のwp-config.phpサンプル
```

## LICENCE

MIT License

Copyright (c) 2018 ELASTIC Consultants Inc.

