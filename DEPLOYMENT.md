# Hướng dẫn Deploy lên DigitalOcean App Platform

## Yêu cầu

- Tài khoản DigitalOcean
- Code đã được push lên GitHub

## Các bước Deploy

### 1. Cập nhật file `.do/app.yaml`

Mở file `.do/app.yaml` và thay đổi:

```yaml
github:
    repo: lamtruong1006/greeco-laravel # Thay bằng repo của bạn
    branch: main
```

### 2. Tạo App Key

Chạy lệnh sau để sinh APP_KEY:

```bash
php artisan key:generate --show
```

### 3. Deploy trên DigitalOcean

#### Cách 1: Sử dụng giao diện web

1. Đăng nhập vào [DigitalOcean](https://cloud.digitalocean.com)
2. Vào **Apps** → **Create App**
3. Chọn **GitHub** và authorize
4. Chọn repository `greeco-laravel`
5. Chọn branch `main`
6. DigitalOcean sẽ tự động phát hiện file `.do/app.yaml`
7. Thiết lập **Environment Variables**:
    - `APP_KEY`: (paste key từ bước 2)
    - `APP_URL`: `https://your-app-name.ondigitalocean.app` (sẽ được cung cấp sau khi tạo)
8. Click **Create Resources**

#### Cách 2: Sử dụng doctl CLI

```bash
# Cài đặt doctl
# Windows: scoop install doctl hoặc choco install doctl

# Đăng nhập
doctl auth init

# Deploy
doctl apps create --spec .do/app.yaml
```

### 4. Sau khi Deploy thành công

1. Vào **Settings** → **Domains** để thêm domain riêng
2. Kiểm tra **Runtime Logs** để xem lỗi nếu có
3. Chạy migrations nếu chưa tự động:
    ```bash
    doctl apps console web --command="php artisan migrate"
    ```

## Chi phí ước tính

| Service        | Plan           | Giá/tháng     |
| -------------- | -------------- | ------------- |
| Web App        | basic-xxs      | $5            |
| MySQL Database | db-s-1vcpu-1gb | $15           |
| **Tổng**       |                | **$20/tháng** |

## Tùy chọn tiết kiệm chi phí

- Sử dụng Managed Database bên ngoài (PlanetScale free tier)
- Sử dụng SQLite cho dự án nhỏ
- Bỏ database trong app.yaml và dùng external database

## Troubleshooting

### Lỗi 502 Bad Gateway

- Kiểm tra health check path trong app.yaml
- Xem Runtime Logs

### Lỗi Database

- Kiểm tra environment variables DB\_\*
- Đảm bảo database đã được tạo và running

### Lỗi Storage/Upload

- Chạy `php artisan storage:link`
- Kiểm tra FILESYSTEM_DISK=public

## Files đã tạo cho deployment

```
greeco-laravel/
├── .do/
│   └── app.yaml          # DigitalOcean App Platform config
├── docker/
│   ├── nginx.conf        # Nginx configuration
│   ├── supervisord.conf  # Process manager config
│   ├── php.ini           # PHP production settings
│   └── deploy.sh         # Deploy script
├── Dockerfile            # Docker build instructions
└── .dockerignore         # Docker ignore files
```
