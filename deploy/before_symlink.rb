server_side_wordpress_path = "#{config.shared_path}/serverside_wp"

unless Dir.exists?(server_side_wordpress_path)
  run "cp #{config.current_path} #{server_side_wordpress_path}"
end
