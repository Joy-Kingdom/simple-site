FROM php:8.2-cli

WORKDIR /app
COPY . /app

# Install sqlite
RUN apt-get update && apt-get install -y sqlite3

# Expose port for Render
EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000"]
