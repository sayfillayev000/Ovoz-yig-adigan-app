# E-Ovoz Veb sayt

Bu veb sayt muammolarga ovoz yig'adigan platforma

## Platformada

-   **Admin Panel**:

    -   Admin muammolarni CRUD qiladi
    -   Userlar platformaga kirib muammolarga biriga ovoz berishlari mumkin

## O'rnatish

1. Database = `voter`

2. Terminal

    ```shell
    git clone  https://github.com/sayfillayev000/Ovoz-yig-adigan-app.git
    ```

    ```shell
    code e-voting
    ```

3. `.env`

    - Terminal (VS Code):
        ```shell
        cp .env.example .env
        ```
    - `.env`:
        ```shell
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=voter
        DB_USERNAME=root
        DB_PASSWORD=
        ```

4. Terminal (VS Code)
    - ```shell
      composer i ;
      php artisan key:generate ;
      php artisan migirate:fresh --seed
      ```
    - ```shell
      php artisan serve
      npm install
      npm run dev
      ```

## Ishlating

-   Admin

    ```shell
    email   : admin@gmail.com
    password: password
    ```

-   Voter
    ```shell
    email   : voter@gmail.com
    password: password
    ```
