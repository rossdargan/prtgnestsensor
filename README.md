# Prtg Nest Sensor
This allows you to get the following details from your nest thermostat:

- nesttemp
- nesthumidity
- autoaway
- manualaway
- battery

The docker file will allow you to specify your username and password as environmental variables

You can run the container via:

    docker run -d -p 82:80 -e "USERNAME=nest-email.address.com" -e "PASSWORD=xxxx"   rossdargan/prtgnestsensor
 
 note this will run as port 82 on the host.
 
 You could also use a docker compose file as follows:
 
      prtg-nest:
      image: 'rossdargan/prtgnestsensor'
      restart: always
      ports:
       - "82:80"
      environment:
       - USERNAME=nest-email.address.com
       - PASSWORD=xxx
      networks:
       - prtg-network
      container_name: prtg-nest
