# 使用 Node.js 22（內建 sqlite 支援）
FROM node:22-alpine

WORKDIR /app

# 預先安裝 nuxi
RUN npm install -g nuxi@latest

RUN apk add --no-cache git

EXPOSE 3000 24678

CMD ["npm", "run", "dev"]