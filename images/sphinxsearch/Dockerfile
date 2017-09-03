# Для начала указываем исходный образ, он будет использован как основа
FROM ubuntu:xenial
# Необязательная строка с указанием автора образа
MAINTAINER eshaft <eshaft@gmail.com>

RUN apt-get update \
	&& apt-get install -y software-properties-common python-software-properties \
	&& add-apt-repository -y ppa:builds/sphinxsearch-rel22 \
	&& apt-get update \
	&& apt-get install -y sudo sphinxsearch

#RUN mkdir /var/lib/sphinxsearch/data

ADD searchd.sh /bin/
ADD indexall.sh /bin/
RUN chmod a+x /bin/searchd.sh && chmod a+x /bin/indexall.sh && chmod 777 /var/lib/sphinxsearch/data

#RUN sudo sed -i 's/START=no/START=yes/g' /etc/default/sphinxsearch

EXPOSE 9306

CMD ["/bin/indexall.sh"]