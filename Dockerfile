FROM bfren/freshrss:latest
CMD ["sh", "-c", "nginx -g 'daemon off;' & php-fpm -F"]
