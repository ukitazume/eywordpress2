server_side_wordpress_path = "#{config.shared_path}/serverside_wp"
run! "ln -nfs #{server_side_wordpress_path} #{config.current_path} "
