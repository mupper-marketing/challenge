class CreateAdmins < ActiveRecord::Migration
  def change
    create_table :admins do |t|
      t.text :name
      t.text :email

      t.timestamps null: false
    end
  end
end
