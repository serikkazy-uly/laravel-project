up:
	docker-compose up -d

down:
	docker-compose down

cli:
	docker-compose exec php-cli bash

npm-build:
	docker-compose exec node npm run build

npm-dev:
	docker-compose exec node npm run dev

npm-install:
	docker-compose exec node npm install

tinker:
	docker-compose exec -u 0 php-cli php artisan tinker
