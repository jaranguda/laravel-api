FROM surbakti/impal-7.4 

COPY . /app
#RUN adduser app
RUN rm -fr vendor
#RUN chown app:app -R /app
#USER app 
WORKDIR /app

RUN composer install --no-dev

ENTRYPOINT ["/app/artisan", "serve"]
