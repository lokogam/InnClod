# Dockerfile

FROM node:18-alpine

WORKDIR /usr/src/app

# Copiar solo los archivos necesarios, evitando copiar todo el directorio
COPY ./app/package.json ./app/package-lock.json ./
RUN npm install

# Copiar el resto de los archivos necesarios
COPY . .

# RUN npm run build

EXPOSE 3001

ENTRYPOINT ["tail", "-f", "/dev/null"]
