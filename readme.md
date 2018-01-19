# laravel + vue 实现收藏夹功能的demo

# Screenshots
![图1](https://wx3.sinaimg.cn/large/006q3SyDgy1fnlxnyvxmhg31gi0qtnpe.gif)

# Installation

## 1. 下载
```
git clone https://github.com/pandoraxm/laravel-vue-favorites.git
```


## 2. composer安装

```
cd llaravel-vue-favorites

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

## 5. 迁移

```
php artisan migrate
```

## 6. laravel-admin表迁移

```
php artisan admin:install
```

## 7. npm安装

```
npm install
```

# Usage
执行`artisan`命令运行

```
php artisan serve
```