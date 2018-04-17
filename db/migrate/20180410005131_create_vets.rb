class CreateVets < ActiveRecord::Migration
  def change
    create_table :vets do |t|
      t.text :name
      t.text :phone
      t.text :crv
      t.text :address

      t.timestamps null: false
    end
  end
end
