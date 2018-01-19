# laravel-admin中如何使用WangEditor，以及laravel-admin多图上传的demo

# Screenshots
![图1](https://wx3.sinaimg.cn/large/006q3SyDgy1fnlxnyvxmhg31gi0qtnpe.gif)

# Installation

## 1. 下载
```
git clone https://github.com/pandoraxm/laravel-admin-wangeditor.git
```

## 2. composer安装

```
cd laravel_markdown

composer install
```

## 3. 修改env以及数据库配置

```
cp .env.example .env

vim .env
```

## 4. 生成key

```
php artisan key:generate

```

# Usage
执行`artisan`命令运行

```
php artisan serve
```