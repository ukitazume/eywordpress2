require './common.rb'
unless Dir.exists?(server_side_wordpress_path)
  run! "cp -r #{config.latest_release} #{server_side_wordpress_path}"
end
