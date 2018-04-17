class AddAvatarToAnimals < ActiveRecord::Migration
  def change
    add_column :animals, :avatar, :string
  end
end
