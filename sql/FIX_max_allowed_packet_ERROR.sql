-- fix 'max_allowed_packet' error
SET global net_buffer_length=1000000; 
SET global max_allowed_packet=1000000000;
